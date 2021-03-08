<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class DateController extends AbstractController
{
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('base.html.twig');
        
    }
    
    public function string(): Response
    {
        $length = random_int(0,20);
        $string = '';
        for($i = 0; $i < $length; $i++)
        {
            $string .= random_int(64,82);
        }
        
        return $this->render('date/string.html.twig', [
            'string' => $string,
        ]);
    }
}
?>
