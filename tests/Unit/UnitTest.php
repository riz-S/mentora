<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Support\Facades\Auth;
use App\Models\Mentee;
class UnitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_changePass()
    {
        Auth::shouldReceive('user')->andReturn(Mentee::first());
        $this->withoutMiddleware();

        $response = $this->post(route('changePass'),
        [
            'oldPass' => 'Tes12345',
            'newPass' => 'Tes12346',
            'newPass_confirmation' => 'Tes12346'
        ]);

        $response->assertStatus(302);
        $response->assertSessionHas('error', 'Password yang anda masukkan tidak sama dengan password lama anda, silahkan coba lagi');
        $response->assertSessionHas('error', 'Password baru tidak boleh sama dengan password lama.');
    }
}
