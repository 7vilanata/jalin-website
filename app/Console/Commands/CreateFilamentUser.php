<?php
// app/Console/Commands/CreateFilamentUser.php
namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateFilamentUser extends Command
{
    // The name and signature of the console command.
    protected $signature = 'filament:create-user {name} {email} {password}';

    // The console command description.
    protected $description = 'Create a new user for Filament admin panel';

    // Execute the console command.
    public function handle()
    {
        // Retrieve the name, email, and password from the arguments
        $name = $this->argument('name');
        $email = $this->argument('email');
        $password = $this->argument('password');

        // Create the user
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        // Inform the user of the success
        $this->info("User created successfully: {$user->name} ({$user->email})");
    }
}
