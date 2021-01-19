<?php

namespace ContainerWoHOyPu;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2c274 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerae1fa = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties718ba = [
        
    ];

    public function getConnection()
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'getConnection', array(), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'getMetadataFactory', array(), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'getExpressionBuilder', array(), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'beginTransaction', array(), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'getCache', array(), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->getCache();
    }

    public function transactional($func)
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'transactional', array('func' => $func), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->transactional($func);
    }

    public function commit()
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'commit', array(), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->commit();
    }

    public function rollback()
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'rollback', array(), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'getClassMetadata', array('className' => $className), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'createQuery', array('dql' => $dql), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'createNamedQuery', array('name' => $name), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'createQueryBuilder', array(), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'flush', array('entity' => $entity), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'clear', array('entityName' => $entityName), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->clear($entityName);
    }

    public function close()
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'close', array(), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->close();
    }

    public function persist($entity)
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'persist', array('entity' => $entity), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'remove', array('entity' => $entity), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'refresh', array('entity' => $entity), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'detach', array('entity' => $entity), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'merge', array('entity' => $entity), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'getRepository', array('entityName' => $entityName), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'contains', array('entity' => $entity), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'getEventManager', array(), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'getConfiguration', array(), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'isOpen', array(), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'getUnitOfWork', array(), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'getProxyFactory', array(), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'initializeObject', array('obj' => $obj), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'getFilters', array(), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'isFiltersStateClean', array(), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'hasFilters', array(), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return $this->valueHolder2c274->hasFilters();
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

        $instance->initializerae1fa = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder2c274) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2c274 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2c274->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, '__get', ['name' => $name], $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        if (isset(self::$publicProperties718ba[$name])) {
            return $this->valueHolder2c274->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c274;

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

        $targetObject = $this->valueHolder2c274;
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
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c274;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2c274;
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
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, '__isset', array('name' => $name), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c274;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2c274;
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
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, '__unset', array('name' => $name), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2c274;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2c274;
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
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, '__clone', array(), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        $this->valueHolder2c274 = clone $this->valueHolder2c274;
    }

    public function __sleep()
    {
        $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, '__sleep', array(), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;

        return array('valueHolder2c274');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerae1fa = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerae1fa;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerae1fa && ($this->initializerae1fa->__invoke($valueHolder2c274, $this, 'initializeProxy', array(), $this->initializerae1fa) || 1) && $this->valueHolder2c274 = $valueHolder2c274;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2c274;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2c274;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
