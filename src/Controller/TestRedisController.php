<?php


namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\HttpFoundation\Response;

class TestRedisController
{
    /**
     * Tests if Redis can connect
     *
     * @Route("/redisTest")
     */
    public function RedisTest(AdapterInterface $cache)
    {
        $item = $cache->getItem('redis_test');
        if (!$item->isHit()) {
            $item->set("My_content_to_store");
            $cache->save($item);
        }
        $storedContent = $item->get();

        return new Response($storedContent);
    }
}