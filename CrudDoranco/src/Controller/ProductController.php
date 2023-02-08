<?php

namespace App\Controller;

use App\Entity\Products;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product/new')]
    public function new(EntityManagerInterface $entityManager):Response
    {
        $product = new Products();
        $product->setTitle('Les Pommes.');
        $product->setDescription('J\'aime les pommes. D\'amour, et d\'Adam');
        $product->setGenre('biblique');
        $product->setTrackCount(rand(6, 10));
        $product->setVotes(rand(-10, 20));

        $entityManager->persist($product);
        $entityManager->flush();

        return new Response(
            sprintf(
                'What %d is %d tracks of that',
                $product->getId(),
                $product->getTrackCount()
            )
        );
        // dd($product);
    }
}