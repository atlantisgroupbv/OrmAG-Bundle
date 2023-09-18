<?phpnamespace AtlantisGroup\OrmAGBundle\DependencyInjection;use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;use Symfony\Component\Config\Definition\Builder\TreeBuilder;use Symfony\Component\Config\Definition\ConfigurationInterface;class Configuration implements ConfigurationInterface{    protected $name = 'orm_a_g';    public function getConfigTreeBuilder()    {        $treeBuilder = new TreeBuilder($this->name);        /** @var ArrayNodeDefinition $rootNode */        //$rootNode = method_exists($treeBuilder, 'getRootNode') ? $treeBuilder->getRootNode() : $this->name;        $rootNode = $treeBuilder->getRootNode();        $rootNode            ->children()                ->arrayNode('connection')                    ->children()                        ->scalarNode('server')->defaultValue('')->end()                        ->scalarNode('user')->defaultValue('')->end()                        ->scalarNode('pass')->defaultValue('')->end()                        ->scalarNode('database')->defaultValue('')->end()                        ->scalarNode('charset')->defaultValue('utf8')->end()                    ->end()                ->end()            ->end();        return $treeBuilder;    }}