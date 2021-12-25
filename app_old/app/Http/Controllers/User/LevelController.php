<?php

namespace App\Http\Controllers\User;
/**
 * Kyc Controller
 *
 *
 * @package TokenLite
 * @author Softnio
 * @version 1.0.6
 */
use Auth;
use Validator;
use IcoHandler;
use App\Models\User;
use App\Models\Page;
use App\Models\UserMeta;
use App\Helpers\ReCaptcha;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class LevelController extends Controller
{
    // Enable recaptcha to the public form 
     protected $handler;
    public function __construct(IcoHandler $handler)
    {
        $this->middleware('auth');
        $this->handler = $handler;
    }

    /**
     * Show the kyc status
     *
     * @return \Illuminate\Http\Response
     * @version 1.0.0
     * @since 1.0
     * @return void
     */
    public function index()
    {
        $user = Auth::user();
        
        return view('user.level', compact('user'));
    }

    /**
     * Show the kyc status
     *
     * @return \Illuminate\Http\Response
     * @version 1.0.0
     * @since 1.0
     * @return void
     */
    private function level()
    {
        
    }
}