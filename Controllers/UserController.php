<?php
namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use App\Services\Business\SecurityService;

class UserController extends Controller
{
    // To obtain an instance of the current HTTP request from a post
    public function index(Request $request)
    {
        // Create a usermodel w/ firstname, lastname, email, and password
        $credentials = new UserModel(request()->get('firstname'));
        
        // Instantiate the Business Logic Layer
        $serviceLogin = new SecurityService();
        
        // Pass the credentials to the Business Layer
        $isValid = $serviceLogin->login($credentials);
        
        // Determine which view to display
        if ($isValid)
        {
            echo "Found the string value 'CST-256'";
        }
        else
        {
            echo "Did not find the string value 'CST-256'";
        }
        
        return view('assessment');
    }
}