<?php

namespace ContainerAR8J2ED;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderabd20 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer09b06 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties541be = [
        
    ];

    public function getConnection()
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'getConnection', array(), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'getMetadataFactory', array(), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'getExpressionBuilder', array(), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'beginTransaction', array(), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'getCache', array(), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->getCache();
    }

    public function transactional($func)
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'transactional', array('func' => $func), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->transactional($func);
    }

    public function commit()
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'commit', array(), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->commit();
    }

    public function rollback()
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'rollback', array(), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'getClassMetadata', array('className' => $className), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'createQuery', array('dql' => $dql), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'createNamedQuery', array('name' => $name), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'createQueryBuilder', array(), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'flush', array('entity' => $entity), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'clear', array('entityName' => $entityName), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->clear($entityName);
    }

    public function close()
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'close', array(), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->close();
    }

    public function persist($entity)
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'persist', array('entity' => $entity), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'remove', array('entity' => $entity), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'refresh', array('entity' => $entity), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'detach', array('entity' => $entity), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'merge', array('entity' => $entity), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'getRepository', array('entityName' => $entityName), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'contains', array('entity' => $entity), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'getEventManager', array(), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'getConfiguration', array(), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'isOpen', array(), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'getUnitOfWork', array(), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'getProxyFactory', array(), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'initializeObject', array('obj' => $obj), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'getFilters', array(), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'isFiltersStateClean', array(), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'hasFilters', array(), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return $this->valueHolderabd20->hasFilters();
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

        $instance->initializer09b06 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderabd20) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderabd20 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderabd20->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, '__get', ['name' => $name], $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        if (isset(self::$publicProperties541be[$name])) {
            return $this->valueHolderabd20->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderabd20;

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

        $targetObject = $this->valueHolderabd20;
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
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderabd20;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderabd20;
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
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, '__isset', array('name' => $name), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderabd20;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderabd20;
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
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, '__unset', array('name' => $name), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderabd20;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderabd20;
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
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, '__clone', array(), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        $this->valueHolderabd20 = clone $this->valueHolderabd20;
    }

    public function __sleep()
    {
        $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, '__sleep', array(), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;

        return array('valueHolderabd20');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer09b06 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer09b06;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer09b06 && ($this->initializer09b06->__invoke($valueHolderabd20, $this, 'initializeProxy', array(), $this->initializer09b06) || 1) && $this->valueHolderabd20 = $valueHolderabd20;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderabd20;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderabd20;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
