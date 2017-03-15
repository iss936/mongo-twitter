<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request,
    Symfony\Component\Security\Core\Exception\AccessDeniedException,
    Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use FOS\RestBundle\Controller\FOSRestController,
    FOS\RestBundle\Controller\Annotations\Route,
    FOS\RestBundle\Controller\Annotations\View,
    FOS\RestBundle\View\View AS FOSView;
use FOS\RestBundle\Controller\Annotations\Get;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use JMS\SecurityExtraBundle\Annotation\Secure;
use FOS\RestBundle\Controller\Annotations\Post;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * 
 * Controller concernant l'API voir doc /api/doc
 */
class MainRestController extends FOSRestController
{
    /**
     * Permet de récupérer au format json le formulaire 
     *
     * @Get("/main-twitter")
     * @ApiDoc(
     *     statusCodes={
     *         200="Retourner quand success",
     *         400="Erreur de paramètre"
     *     },
     *     authentication=false,
     *     tags={
     *         "formj"
     *     },
     *     parameters={
     *       {"name"="id", "dataType"="string", "required"=true, "description"="id"}
     *     }
     *     )
     */
    public function getFormJsonAction()
    {

        return 1;

    }
}
