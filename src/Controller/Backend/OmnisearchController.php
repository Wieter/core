<?php

declare(strict_types=1);

namespace Bolt\Controller\Backend;

use Bolt\Controller\BaseController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OmnisearchController extends BaseController
{
    /**
     * @Route("/omnisearch", name="bolt_omnisearch")
     */
    public function omnisearch(): Response
    {
        $twigVars = [
            'title' => 'Omnisearch',
            'subtitle' => 'To search, in an omni-like fashion',
        ];

        return $this->renderTemplate('pages/placeholder.html.twig', $twigVars);
    }
}