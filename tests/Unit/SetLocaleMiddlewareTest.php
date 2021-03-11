<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Kernel;
use App\Http\Middleware\SetLocale;
use Illuminate\Http\Request;

class SetLocaleMiddlewareTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    /** @test */
    public function it_is_correctly_registered_in_route_middleware_array_of_the_http_kernel()
    {
        $routeMiddleware = resolve(Kernel::class)->getRouteMiddleware();

        $this->assertArrayHasKey('setLocale', $routeMiddleware);

        // Assert it's pointing to the correct namespace
        $this->assertEquals(SetLocale::class, $routeMiddleware['setLocale']);
    }

    /** @test */
    public function it_correctly_sets_the_app_locale_to_the_passed_in_locale_string()
    {
        $request = new Request;

        $middleware = new SetLocale;

        $middleware->handle($request, function ($req) {

            $this->assertEquals('en', app()->getLocale());

        }, 'en');
    }
}
