<?php

namespace Proxies\__CG__\App\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Author extends \App\Entity\Author implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'imageFile', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'pseudo', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'imageName', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'biography', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'birthdate', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'dateOfDeath', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'books', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'slug'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'imageFile', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'name', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'pseudo', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'imageName', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'biography', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'birthdate', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'dateOfDeath', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'books', '' . "\0" . 'App\\Entity\\Author' . "\0" . 'slug'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Author $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setImageFile(\Symfony\Component\HttpFoundation\File\File $imageFile = NULL): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageFile', [$imageFile]);

        parent::setImageFile($imageFile);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageFile(): ?\Symfony\Component\HttpFoundation\File\File
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageFile', []);

        return parent::getImageFile();
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(?string $name): \App\Entity\Author
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName(?string $firstName): \App\Entity\Author
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getPseudo(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPseudo', []);

        return parent::getPseudo();
    }

    /**
     * {@inheritDoc}
     */
    public function setPseudo(?string $pseudo): \App\Entity\Author
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPseudo', [$pseudo]);

        return parent::setPseudo($pseudo);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageName', []);

        return parent::getImageName();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageName(?string $imageName): \App\Entity\Author
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageName', [$imageName]);

        return parent::setImageName($imageName);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?\DateTimeImmutable
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): \App\Entity\Author
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getBiography(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBiography', []);

        return parent::getBiography();
    }

    /**
     * {@inheritDoc}
     */
    public function setBiography(?string $biography): \App\Entity\Author
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBiography', [$biography]);

        return parent::setBiography($biography);
    }

    /**
     * {@inheritDoc}
     */
    public function getBirthdate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBirthdate', []);

        return parent::getBirthdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setBirthdate(?\DateTimeInterface $birthdate): \App\Entity\Author
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBirthdate', [$birthdate]);

        return parent::setBirthdate($birthdate);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateOfDeath(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateOfDeath', []);

        return parent::getDateOfDeath();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateOfDeath(?\DateTimeInterface $dateOfDeath): \App\Entity\Author
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateOfDeath', [$dateOfDeath]);

        return parent::setDateOfDeath($dateOfDeath);
    }

    /**
     * {@inheritDoc}
     */
    public function getBooks(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBooks', []);

        return parent::getBooks();
    }

    /**
     * {@inheritDoc}
     */
    public function addBook(\App\Entity\Book $book): \App\Entity\Author
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBook', [$book]);

        return parent::addBook($book);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBook(\App\Entity\Book $book): \App\Entity\Author
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBook', [$book]);

        return parent::removeBook($book);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug(string $slug): \App\Entity\Author
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

}
