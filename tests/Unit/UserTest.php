<?php
 
use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
 
class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }
 
    //test create tài khoản
    public function testCreateUser()
    {
        $user = User::factory()->create([
            'name' => 'toan99',
            'email' => 'toan99@example.com',
            'password' => bcrypt($password = '12345678'),
        ]);
        $this->assertEquals(1, count(array($user)));
    }
  
    //test register user
    public function testCanRegister()
    {
        $this->assertGuest();
        $user = User::factory()->create();
        $response = $this->post('/user/register', [ 
        'email' => $user->email,
        'password' => '12345678', 
        ]);
        $response->assertStatus(302)->assertSessionHasErrors('email');
        $this->withoutMiddleware()->assertGuest();
    }
 
    //test đăng nhập thành công
    public function testSuccessfulLogin()
    {
        User::factory()->create([
           'email' => 'toan99@test.com',
           'password' => bcrypt('12345678'),
        ]);
        $loginData = ['email' => 'toan99@test.com', 'password' => '12345678'];
 
        $this->post('/user/login',$loginData)->assertStatus(302)
        ->assertRedirect('/');
        $this->assertAuthenticated();
    }
 
      
}
