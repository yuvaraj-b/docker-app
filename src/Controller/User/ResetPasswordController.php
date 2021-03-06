<?php

declare(strict_types=1);

namespace App\Controller\User;

use App\Entity\User\AppUser;
use App\Form\User\ResetPasswordType;
use Doctrine\ORM\EntityManagerInterface;
use MsgPhp\User\Command\ChangeUserCredentialCommand;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

final class ResetPasswordController
{
    public function __invoke(
        string $token,
        Request $request,
        FormFactoryInterface $formFactory,
        FlashBagInterface $flashBag,
        Environment $twig,
        MessageBusInterface $bus,
        EntityManagerInterface $em
    ): Response {
        $user = $em->getRepository(AppUser::class)->findOneBy(['passwordResetToken' => $token]);

        if (!$user instanceof AppUser) {
            throw new NotFoundHttpException();
        }

        $form = $formFactory->createNamed('', ResetPasswordType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $bus->dispatch(new ChangeUserCredentialCommand($user->getId(), ['password' => $form->getData()['password']]));
            $flashBag->add('success', 'You have successfully changed your password.');

            return new RedirectResponse('/login');
        }

        return new Response($twig->render('user/reset_password.html.twig', [
            'form' => $form->createView(),
        ]));
    }
}
