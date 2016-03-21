<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;
umask(0000);

$loader = require_once __DIR__.'/app/bootstrap.php.cache';
Debug::enable();

require_once __DIR__.'/app/AppKernel.php';

$kernel = new AppKernel('dev', true);
$kernel->loadClassCache();
$request = Request::createFromGlobals();
$kernel->boot();

$container = $kernel->getContainer();
$container->enterScope('request');
$container->set('request', $request);

// all our setup is done!!!!!!
use Yoda\EventBundle\Entity\Event;

$event = new Event();
$event->setName('Darth\'s surprise birthday party');
$event->setLocation('Dethstar');
$event->setTime(new \DateTime('tomorrow noon'));
//$event->setDetails('Ha! Dearth hates surprises!');

$em = $container->get('doctrine')->getManager();
$em->persist($event);
$em->flush();

/*$templating = $container->get('templating');

echo $templating->render(
    'EventBundle:Default:index.html.twig',
    array(
        'name' => 'Yoda',
        'count' => 5,
    )
);
*/