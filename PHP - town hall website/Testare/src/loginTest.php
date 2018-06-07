<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase{
	/** @test */
	public function a_user_logs_in()
	{
		$user =  factory(App\User::class)->create(['email' => 'john@example.com', 'password' => bcrypt('testpass123')]);

		$this->visit(route('login'));
		$this->type($user->email, 'email');
		$this->type($user->password, 'password');
		$this->press('Login');
		$this->assertTrue(Auth::check());
		$this->seePageIs(route('dashboard'));
	}
	/** @test */
	public function a_user_can_log_in()
	{
		$user = factory(App\User::class)->create([
			 'email' => 'john@example.com', 
			 'password' => bcrypt('testpass123')
		]);

		$this->visit(route('login'))
			->type($user->email, 'email')
			->type('testpass123', 'password')
			->press('Login')
			->see('Successfully logged in')
			->onPage('/dashboard');
	}
}