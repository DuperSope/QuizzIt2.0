<?php

namespace GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class AJAXController extends Controller
{

    public function bytheme_getquizzbythemeAction(Request $request)
    {
        $themeid = $request->get('themeid');
        $i = $request->get('i');
        
        $em = $this->getDoctrine()->getManager();
        $r_quizz = $em->getRepository('QuizzBundle:Quizz');
        $quizz = $r_quizz->findBy(array('theme' => $themeid, 'private' => 0, 'deleted' => 0), array('id' => 'desc'), ($i+1)*15, $i*15);
        $count = $r_quizz->countByThemeAfter($themeid, 0, 0, ($i+1)*15);
        
        return new JsonResponse(array('quizz' => json_encode($quizz), 'count' => $count, 'i' => $i));
    }
    
    public function bytheme_getthemeAction(Request $request)
    {
        $level = $request->get('level')+1;
        $parent = $request->get('parent');
        
        $em = $this->getDoctrine()->getManager();
        $r_theme = $em->getRepository("GeneralBundle:Theme");
        $themes = $r_theme->findBy(array('level' => $level, 'parent' => $parent), array('id' => 'asc'));
        
        return new JsonResponse(array('themes' => json_encode($themes)));
    }
    
    public function bytheme_returnthemeAction(Request $request)
    {
        $level = intval($request->get('level'));
        $parent = intval($request->get('parent'));
        
        $em = $this->getDoctrine()->getManager();
        $r_theme = $em->getRepository("GeneralBundle:Theme");
        if($level == 0) {
            $themes = $r_theme->findBy(array("level" => 0), array('id' => 'asc'));
        } else {
            $theme = $r_theme->findOneById($parent);
            $themes = $r_theme->findBy(array('parent' => $theme->getParent()), array('id' => 'asc'));
        }
        
        return new JsonResponse(array('themes' => json_encode($themes)));
    }
    
}
