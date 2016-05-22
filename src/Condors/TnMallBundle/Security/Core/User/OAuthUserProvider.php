<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OAuthUserProvider
 *
 * @author Amin
 */
namespace Condors\TnMallBundle\Security\Core\User;

use HWI\Bundle\OAuthBundle\OAuth\Response\UserResponseInterface;
use HWI\Bundle\OAuthBundle\Security\Core\User\FOSUBUserProvider as BaseClass;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserChecker;
use Symfony\Component\Security\Core\User\UserInterface;

class OAuthUserProvider extends BaseClass
{       
    /**
     * {@inheritdoc}
     */
    public function loadUserByOAuthUserResponse(UserResponseInterface $response)
    {
        $socialID = $response->getUsername();
        $user = $this->userManager->findUserBy(array($this->getProperty($response)=>$socialID));
        $email = $response->getEmail();
        $nickName = $response->getNickname(); 
        $profilePic = $response->getProfilePicture();
        $userName = $response->getFirstName(). " ".$response->getLastName() ;
        $userNom = $response->getFirstName() ;
        $userPrenom = $response->getLastName();
          
        
        
 
  
       

        //check if the user already has the corresponding social account
        if (null === $user) {
            //check if the user has a normal account
            $user = $this->userManager->findUserByEmail($email);
 
            if (null === $user || !$user instanceof UserInterface) {
                //if the user does not have a normal account, set it up:
                $user = $this->userManager->createUser();
             
                $user->setEmail($email);
                $user->setPlainPassword(md5(uniqid()));
                $user->setEnabled(true);
                $user->addRole("ROLE_RESPONSABLE");
                $user->setUsername($userName);
                $user->setImage($profilePic);
                $user->setNom($userNom); 
                $user->setPrenom($userPrenom) ;
            }
            //then set its corresponding social id
            $service = $response->getResourceOwner()->getName();
            switch ($service) {
                case 'google':
                    $user->setGoogleID($socialID);
                    break;
                case 'facebook':
                    $user->setUsername($nickName);
                    $user->setFacebookID($socialID);
                    $nomPrenom = explode(" ", $nickName);
                    $user->setImage("https://graph.facebook.com/$socialID/picture?width=400&height=400");
                    $user->setNom($nomPrenom[1]); 
                    $user->setPrenom($nomPrenom[0]) ;
                    break;
            }
         
            $this->userManager->updateUser($user);
        } else {
            //and then login the user
            $checker = new UserChecker();
            $checker->checkPreAuth($user);
        }
 
        return $user;
    }
}
 