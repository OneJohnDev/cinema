<?php

namespace ContainerPjvbvnF;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderaea66 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer772c0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6c020 = [
        
    ];

    public function getConnection()
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'getConnection', array(), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'getMetadataFactory', array(), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'getExpressionBuilder', array(), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'beginTransaction', array(), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'getCache', array(), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->getCache();
    }

    public function transactional($func)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'transactional', array('func' => $func), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'wrapInTransaction', array('func' => $func), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'commit', array(), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->commit();
    }

    public function rollback()
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'rollback', array(), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'getClassMetadata', array('className' => $className), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'createQuery', array('dql' => $dql), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'createNamedQuery', array('name' => $name), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'createQueryBuilder', array(), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'flush', array('entity' => $entity), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'clear', array('entityName' => $entityName), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->clear($entityName);
    }

    public function close()
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'close', array(), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->close();
    }

    public function persist($entity)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'persist', array('entity' => $entity), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'remove', array('entity' => $entity), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'refresh', array('entity' => $entity), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'detach', array('entity' => $entity), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'merge', array('entity' => $entity), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'getRepository', array('entityName' => $entityName), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'contains', array('entity' => $entity), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'getEventManager', array(), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'getConfiguration', array(), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'isOpen', array(), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'getUnitOfWork', array(), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'getProxyFactory', array(), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'initializeObject', array('obj' => $obj), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'getFilters', array(), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'isFiltersStateClean', array(), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'hasFilters', array(), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return $this->valueHolderaea66->hasFilters();
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

        $instance->initializer772c0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderaea66) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderaea66 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderaea66->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, '__get', ['name' => $name], $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        if (isset(self::$publicProperties6c020[$name])) {
            return $this->valueHolderaea66->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaea66;

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

        $targetObject = $this->valueHolderaea66;
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
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaea66;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderaea66;
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
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, '__isset', array('name' => $name), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaea66;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderaea66;
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
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, '__unset', array('name' => $name), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderaea66;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderaea66;
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
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, '__clone', array(), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        $this->valueHolderaea66 = clone $this->valueHolderaea66;
    }

    public function __sleep()
    {
        $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, '__sleep', array(), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;

        return array('valueHolderaea66');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer772c0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer772c0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer772c0 && ($this->initializer772c0->__invoke($valueHolderaea66, $this, 'initializeProxy', array(), $this->initializer772c0) || 1) && $this->valueHolderaea66 = $valueHolderaea66;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderaea66;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderaea66;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
