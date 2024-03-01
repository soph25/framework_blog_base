<?php
namespace Tests\Framework\Middleware;

use Framework\Middleware\RendererRequestMiddleware;
use Framework\Renderer\RendererInterface;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\ServerRequest;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class RendererRequestMiddlewareTest extends TestCase
{

    private $renderer;
    private $delegate;
    private $middleware;

    public function setUp()
    {
        $this->renderer = $this->prophesize(RendererInterface::class);
        $this->delegate = $this->prophesize(RequestHandlerInterface::class);
        $this->delegate
            ->handle(Argument::type(ServerRequestInterface::class))
            ->willReturn(new Response());
        $this->delegate = $this->delegate->reveal();
        $this->middleware = new RendererRequestMiddleware($this->renderer->reveal());
    }

    public function testAddGlobalDomain()
    {
        $this->renderer->addGlobal('domain', 'http://grafikart.fr')->shouldBeCalled();
        $this->renderer->addGlobal('domain', 'http://localhost:3000')->shouldBeCalled();
        $this->renderer->addGlobal('domain', 'https://localhost')->shouldBeCalled();
        $this->middleware->process(new ServerRequest('GET', 'http://grafikart.fr/blog/demo'), $this->delegate);
        $this->middleware->process(new ServerRequest('GET', 'http://localhost:3000/blog/demo'), $this->delegate);
        $this->middleware->process(new ServerRequest('GET', 'https://localhost/blog/demo'), $this->delegate);
    }
}
