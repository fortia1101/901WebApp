<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Socialite;

class RegisterGraduateController extends Controller
{
    public function graduateLogin(Request $request)
    {
        // Google へのリダイレクト
        config(['services.google.redirect' => env('GRADUATE_GOOGLE_CALLBACK_URL')]);
        return Socialite::driver('google')->redirect();
    }

    public function register(Request $request) 
    {
        config(['services.google.redirect' => env('GRADUATE_GOOGLE_CALLBACK_URL')]);
        $graduateGmail = Socialite::driver('google')->stateless()->user();

        $userID = $graduateGmail->getID();
        $userToken = $this->createToken($graduateGmail->getEmail(), $userID);

        if (Auth::check()) {
            User::create([
                'name' => $graduateGmail->getName(),
                'email' => $graduateGmail->getEmail(),
                'password' => Hash::make(uniqid()),
                'avatar' => $graduateGmail->getAvatar(),
                'user_token' => $userToken,
            ]);

            return redirect()
                ->route('user.home')
                ->with('flash_message', '卒部生Gmailの登録完了');
        } else {
            return redirect('/')
                ->with('flash_message', '不正なアクセスです');
        }
    }

    public function createToken($email, $userID)
    {
        $len = strlen($userID);
        if ($len % 2 === 1){
            $userID = $userID . substr($email, 0, 1); // substr(文字列, 切り取り開始, 長さ)
        }

        $userToken = '';
        for ($i = 0; $i < $len; $i += 2) {
            $cell = substr($userID, $i, 2);
            $cell_encrypt = $this->encryptID($cell);
            $userToken = $userToken . $cell_encrypt;
        }

        return $userToken;
    }

    public function encryptID($element)
    {
        $lit_list = [
            'a' => 3, 'b' => 113, 'c' => 251, 'd' => 151, 'e' => 173, 'f' => 347, 'g' => 71, 'h' => 11, 'i' => 89,
            'j' => 433, 'k' => 29, 'l' => 241, 'm' => 163, 'n' => 73, 'o' => 97, 'p' => 31, 'q' => 277, 'r' => 2,
            's' => 101, 't' => 61, 'u' => 233, 'v' => 401, 'w' => 23, 'x' => 7, 'y' => 487, 'z' => 107, 'A' => 337,
            'B' => 1, 'C' => 263, 'D' => 17, 'E' => 457, 'F' => 293, 'G' => 373, 'H' => 47, 'I' => 191, 'J' => 313,
            'K' => 19, 'L' => 463, 'M' => 421, 'N' => 181, 'O' => 83, 'P' => 103, 'Q' => 5, 'R' => 397, 'S' => 53,
            'T' => 211, 'U' => 193, 'V' => 41, 'W' => 61, 'X' => 223, 'Y' => 281, 'G' => 227, '$' => 167, '.' => 467,
        ];

        $e1 = substr($element, 0, 1);
        $e2 = substr($element, 1, 1);

        if (preg_match("[^0-9]", $e1) && preg_match("[^0-9]", $e2)) {
            $encrypt = $lit_list[$e1] * $lit_list[$e2];
            $encrypt_str = (string) $encrypt;
            return $encrypt_str;
        } elseif (preg_match("[0-9]", $e1) && preg_match("[^0-9]", $e2)) {
            $encrypt = (int) $e1 * $lit_list[$e2];
            $encrypt_str = (string) $encrypt;
            $encrypt_str = $encrypt_str . '5';
            return $encrypt_str;
        } elseif (preg_match("[^0-9]", $e1) && preg_match("[^0-9]", $e2)) {
            $encrypt = $lit_list[$e1] * (int) $e2;
            $encrypt_str = (string) $encrypt;
            $encrypt_str = $encrypt_str . '7';
            return $encrypt_str;
        } else {
            $encrypt = (int) $e1 * (int) $e2;
            $encrypt_str = (string) $encrypt;
            $encrypt_str = $encrypt_str . '2';
            return $encrypt_str;
        }
    }
}
