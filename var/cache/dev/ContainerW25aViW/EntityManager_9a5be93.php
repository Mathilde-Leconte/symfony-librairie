<?php

namespace ContainerW25aViW;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0cd81 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf7e47 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf9f1f = [
        
    ];

    public function getConnection()
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'getConnection', array(), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'getMetadataFactory', array(), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'getExpressionBuilder', array(), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'beginTransaction', array(), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'getCache', array(), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'transactional', array('func' => $func), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'commit', array(), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->commit();
    }

    public function rollback()
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'rollback', array(), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'getClassMetadata', array('className' => $className), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'createQuery', array('dql' => $dql), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'createNamedQuery', array('name' => $name), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'createQueryBuilder', array(), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'flush', array('entity' => $entity), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'clear', array('entityName' => $entityName), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->clear($entityName);
    }

    public function close()
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'close', array(), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->close();
    }

    public function persist($entity)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'persist', array('entity' => $entity), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'remove', array('entity' => $entity), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'refresh', array('entity' => $entity), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'detach', array('entity' => $entity), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'merge', array('entity' => $entity), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'contains', array('entity' => $entity), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'getEventManager', array(), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'getConfiguration', array(), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'isOpen', array(), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'getUnitOfWork', array(), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'getProxyFactory', array(), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'initializeObject', array('obj' => $obj), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'getFilters', array(), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'isFiltersStateClean', array(), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'hasFilters', array(), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return $this->valueHolder0cd81->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerf7e47 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder0cd81) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0cd81 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0cd81->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, '__get', ['name' => $name], $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        if (isset(self::$publicPropertiesf9f1f[$name])) {
            return $this->valueHolder0cd81->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0cd81;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0cd81;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0cd81;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0cd81;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, '__isset', array('name' => $name), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0cd81;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0cd81;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, '__unset', array('name' => $name), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0cd81;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0cd81;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, '__clone', array(), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        $this->valueHolder0cd81 = clone $this->valueHolder0cd81;
    }

    public function __sleep()
    {
        $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, '__sleep', array(), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;

        return array('valueHolder0cd81');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf7e47 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf7e47;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf7e47 && ($this->initializerf7e47->__invoke($valueHolder0cd81, $this, 'initializeProxy', array(), $this->initializerf7e47) || 1) && $this->valueHolder0cd81 = $valueHolder0cd81;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0cd81;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0cd81;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
