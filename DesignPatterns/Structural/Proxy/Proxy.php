<?php
namespace DesignPatterns\Structural\Proxy\Conceptual;

interface Subject
{
    public function request(): void;
}

class RealSubject implements Subject
{
    public function request(): void
    {
        echo "RealSubject: Handling request.\n";
    }
}

/**
 * The Proxy has an interface identical to the RealSubject.
 */
class Proxy implements Subject
{
    /**
     * @var RealSubject
     */
    private $realSubject;

    public function __construct(RealSubject $realSubject)
    {
        $this->realSubject = $realSubject;
    }

    public function request(): void
    {
        if ($this->checkAccess()) {
            $this->realSubject->request();
            $this->logAccess();
        }
    }

    private function checkAccess(): bool
    {
        // Some real checks should go here.
        echo "Proxy: Checking access prior to firing a real request.\n";

        return true;
    }

    private function logAccess(): void
    {
        echo "Proxy: Logging the time of request.\n";
    }
}

function clientCode(Subject $subject)
{
    // ...

    $subject->request();

    // ...
}

echo "Client: Executing the client code with a real subject:<br>";
$realSubject = new RealSubject();
clientCode($realSubject);

echo "<br>";

echo "Client: Executing the same client code with a proxy:<br>";
$proxy = new Proxy($realSubject);
clientCode($proxy);