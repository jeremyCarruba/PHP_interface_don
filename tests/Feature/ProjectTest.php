<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProjectTest extends TestCase{

    public function testProjectHTTPGet() {
        $response = $this->get('/project');
        $response->dump();
        $response->assertStatus(200);
    }

    public function testIfProjectContainsH1(){
        $response = $this->get('/project');
        $value = "<h1>Liste de projets</h1>";
        $response->assertSee($value, $escaped = false);
    }
}