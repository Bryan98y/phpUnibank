<?php


namespace AppBundle\Controller;
use AppBundle\Entity\Transaction;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;
use JMS\Serializer\SerializerBuilder;
use Symfony\Component\HttpFoundation\Request;

/**
 *
 * @Rest\Route("api/v1/Transaction")
 */

class TransactionController extends AbstractFOSRestController
{
    /**
     * @Rest\Post("")
     * @SWG\Tag(name="Transaction")
     * @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="JSON Payload",
     *          required=true,
     *          format="application/json",
     *          @SWG\Schema(
     *              @Model(type=OneDto::class)
     *          )
     *
     *      )
     * @SWG\Response(
     *     response=201,
     *     description="Return one create ",
     * )
     * @param Request $request
     * @return View
     */
    public function createUser(Request $request)
    {
        $serializer = SerializerBuilder::create()->build();
        try {
            $Transaction = $serializer->deserialize($request->getContent(), 'AppBundle\Entity\Transaction', 'json');
            $Transaction = new Transaction();
            $Transaction->setName($Transaction->getName());
            $em = $this->getDoctrine()->getManager();
            $em->persist($Transaction);
            $em->flush();
            return new View("one created", Response::HTTP_CREATED);
        } catch (\Exception $e) {
            return new View($e, Response::HTTP_BAD_REQUEST);
        }
    }
}