<?php

namespace Tests\Unit;
use PHPUnit\Framework\TestCase;

class simpenintest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_dashboard()
    {
        $response = $this->get('/dashboard');

        $response->assertStatus(200);
    }

    public function test_permission()
    {
        $response = $this->get('/permission');

        $response->assertStatus(200);
    }

    public function test_user()
    {
        $response = $this->get('/user');

        $response->assertStatus(200);
    }
    public function test_anak()
    {
        $response = $this->get('/anak');

        $response->assertStatus(200);
    }
    
    public function test_petugas()
    {
        $response = $this->get('/petugas');

        $response->assertStatus(200);
    }

    public function test_posyandu()
    {
        $response = $this->get('/posyandu');

        $response->assertStatus(200);
    }

    public function test_jadwal()
    {
        $response = $this->get('/jadwal');

        $response->assertStatus(200);
    }

    public function test_gizi()
    {
        $response = $this->get('/gizi');

        $response->assertStatus(200);
    }

    public function test_role()
    {
        $response = $this->get('/role');

        $response->assertStatus(200);
    }
}
