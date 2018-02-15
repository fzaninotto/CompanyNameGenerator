<?php

namespace CompanyNameGenerator;

/**
 * Provider for the Faker generator
 */
class FakerProvider extends \Faker\Provider\Base
{
    protected static $techTerms = array('AddOn', 'Algorithm', 'Architect', 'Array', 'Asynchronous', 'Avatar', 'Band', 'Base', 'Beta', 'Binary', 'Blog', 'Board', 'Boolean', 'Boot', 'Bot', 'Browser', 'Bug', 'Cache', 'Character', 'Checksum', 'Chip', 'Circuit', 'Client', 'Cloud', 'Cluster', 'Code', 'Codec', 'Coder', 'Column', 'Command', 'Compile', 'Compression', 'Computing', 'Console', 'Constant', 'Control', 'Cookie', 'Core', 'Cyber', 'Default', 'Deprecated', 'Dev', 'Developer', 'Development', 'Device', 'Digital', 'Domain', 'Dynamic', 'Emulation', 'Encryption', 'Engine', 'Error', 'Exception', 'Exploit', 'Export', 'Extension', 'File', 'Font', 'Fragment', 'Frame', 'Function', 'Group', 'Hacker', 'Hard', 'HTTP', 'Icon', 'Input', 'IT', 'Kernel', 'Key', 'Leak', 'Link', 'Load', 'Logic', 'Mail', 'Mashup', 'Mega', 'Meme', 'Memory', 'Meta', 'Mount', 'Navigation', 'Net', 'Node', 'Open', 'OS', 'Output', 'Over', 'Packet', 'Page', 'Parallel', 'Parse', 'Path', 'Phone', 'Ping', 'Pixel', 'Port', 'Power', 'Programmers', 'Programs', 'Protocol', 'Push', 'Query', 'Queue', 'Raw', 'Real', 'Repository', 'Restore', 'Root', 'Router', 'Run', 'Safe', 'Sample', 'Scalable', 'Script', 'Server', 'Session', 'Shell', 'Smart', 'Socket', 'Soft', 'Solid', 'Sound', 'Source', 'Streaming', 'Symfony', 'Syntax', 'System', 'Tag', 'Tape', 'Task', 'Template', 'Thread', 'Token', 'Tool', 'Tweak', 'URL', 'Utility', 'Viral', 'Volume', 'Ware', 'Web', 'Wiki', 'Window', 'Wire');

    protected static $culinaryTerms = array('Appetit', 'Bake', 'Beurre', 'Bistro', 'Blend', 'Boil', 'Bouchees', 'Brew', 'Buffet', 'Caffe', 'Caffeine', 'Cake', 'Carve', 'Caviar', 'Chef', 'Chocolate', 'Chop', 'Citrus', 'Cocoa', 'Compote', 'Cook', 'Cooker', 'Cookery', 'Cool', 'Core', 'Coulis', 'Course', 'Crouton', 'Cuisine', 'Dash', 'Dessert', 'Dip', 'Dish', 'Dress', 'Entree', 'Espresso', 'Extracts', 'Fajitas', 'Fibers', 'Fold', 'Formula', 'Fruit', 'Fumet', 'Fusion', 'Gastronomy', 'Glucose', 'Gourmet', 'Grains', 'Gratin', 'Greens', 'Guacamole', 'Herbs', 'Honey', 'Hybrid', 'Ice', 'Icing', 'Immersion', 'Induction', 'Instant', 'Jasmine', 'Jelly', 'Juice', 'Kiwi', 'Lean', 'Leek', 'Legumes', 'Lemon', 'Lime', 'Liqueur', 'Madeleine', 'Mango', 'Marinate', 'Melon', 'Mill', 'Mince', 'Mirepoix', 'Mix', 'Mousse', 'Muffin', 'Mull', 'Munster', 'Nectar', 'Nut', 'Olive', 'Organic', 'Organic', 'Pan', 'Papillote', 'Pare', 'Pasta', 'Pate', 'Peanut', 'Pear', 'Pesto', 'Picante', 'Pie', 'Pigment', 'Pinot', 'Plate', 'Plum', 'Pod', 'Prepare', 'Pressure', 'Pudding', 'Pulp', 'Quiche', 'Rack', 'Raft', 'Raisin', 'Recipe', 'Reduce', 'Relish', 'Render', 'Risotto', 'Rosemary', 'Roux', 'Rub', 'Salad', 'Salsa', 'Sauce', 'Sauté', 'Season', 'Slice', 'Smoked', 'Soft', 'Sorbet', 'Soup', 'Spaghetti', 'Specialty', 'Spicy', 'Splash', 'Steam', 'Stem', 'Sticky', 'Stuff', 'Sugar', 'Supreme', 'Sushi', 'Sweet', 'Table', 'Tart', 'Taste', 'Tasting', 'Tea', 'Tender', 'Terrine', 'Tomato', 'Vanilla', 'Wash', 'Wax', 'Wine', 'Wok', 'Zest');

    protected static $companyNameFormats = array(
        '{{techTerm}}{{culinaryTerm}}',
        '{{techTerm}}{{techTerm}}',
        '{{culinaryTerm}}{{techTerm}}'
    );

    public static function techTerm()
    {
        return static::randomElement(static::$techTerms);
    }

    public static function culinaryTerm()
    {
        return static::randomElement(static::$culinaryTerms);
    }

    public function companyName()
    {
        $format = static::randomElement(static::$companyNameFormats);

        return $this->generator->parse($format);
    }

}
