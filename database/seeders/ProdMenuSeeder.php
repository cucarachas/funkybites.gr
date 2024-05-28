<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdMenuSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            [
                'name' => 'Salads',
                'is_active' => true,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pizza',
                'is_active' => true,
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Pasta',
                'is_active' => true,
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Burgers',
                'is_active' => true,
                'order' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sandwiches',
                'is_active' => true,
                'order' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'White Wines',
                'is_active' => true,
                'order' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Rose Wines',
                'is_active' => true,
                'order' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Red Wines',
                'is_active' => true,
                'order' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Beers',
                'is_active' => true,
                'order' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Refreshments',
                'is_active' => true,
                'order' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        // Salads
        $categoryId = Category::where('name', 'Salads')->first()->id;
        Product::insert([
            [
                'category_id' => $categoryId,
                'name' => 'Funky Ceasar',
                'description' => 'Μαρούλι, Κρουτόν, Κοτόπουλο, Παρμεζάνα, Καλαμπόκι, Μπέικον, Ceasar\'s Sauce',
                'price' => 8.50,
                'is_active' => true,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Μαύρες Φακές',
                'description' => 'Μαύρες Φακές Beluga, Πράσινη σαλάτα, Πορτοκάλι, Αβοκάντο, Σύκο, Παλαιωμένο Ξηρό Ανθότυρο, Προσούτο, Dressing Εσπεριδοειδών',
                'price' => 8.00,
                'is_active' => true,
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Ελληνική',
                'description' => 'Ντομάτα, Φέτα, Κρεμμύδι, Αγγούρι, Ελιές, Κάπαρι, Παξιμαδάκι, Πιπεριά, Ελαιόλαδο',
                'price' => 7.50,
                'is_active' => true,
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        // Pizza
        $categoryId = Category::where('name', 'Pizza')->first()->id;
        Product::insert([
            [
                'category_id' => $categoryId,
                'name' => 'Margherita',
                'description' => 'Σάλτσα Ντομάτας, Μοτσαρέλα, Βασιλικός',
                'price' => 9.00,
                'is_active' => true,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Special',
                'description' => 'Σάλτσα Ντομάτας, Μοτσαρέλα, Πεπερόνι, Ζαμπόν, Μανιτάρια, Μπέικον, Πιπεριές',
                'price' => 11.50,
                'is_active' => true,
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Diavola',
                'description' => 'Σάλτσα Ντομάτας, Μοτσαρέλα, Jalapenos peppers, Πεπερόνι',
                'price' => 11.50,
                'is_active' => true,
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Barbecue',
                'description' => 'Σάλτσα Μπάρμπεκιου, Γκούντα, Κρεμμύδι, Κοτόπουλο',
                'price' => 12.00,
                'is_active' => true,
                'order' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Ελληνική',
                'description' => 'Σάλτσα Ντομάτας, Μοτσαρέλα, Φέτα, Κρεμμύδι, Ελιές, Ντοματίνι',
                'price' => 10.50,
                'is_active' => true,
                'order' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Tartufo',
                'description' => 'Μοτσαρέλα, Μανιτάρια, Πάστα Τρούφας, Κρέμα γάλακτος',
                'price' => 13.50,
                'is_active' => true,
                'order' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        // Pasta
        $categoryId = Category::where('name', 'Pasta')->first()->id;
        Product::insert([
            [
                'category_id' => $categoryId,
                'name' => 'Pink',
                'description' => 'Μαύρο Ταλιολίνι, Κρέμα Γάλακτος, Βότκα, Λεμόνι, Καπνιστός Σολωμός',
                'price' => 12.00,
                'is_active' => true,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Black',
                'description' => 'Ravioli, Κρέμα Γάλακτος, Πάστα Μαύρης Τρούφας, Καρύδι, Άγρια Μανιτάρια',
                'price' => 11.00,
                'is_active' => true,
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Carbonara',
                'description' => 'Spaghetti, Αυγό, Guanciale, Μαύρο Πιπέρι, Πεκορίνο',
                'price' => 9.00,
                'is_active' => true,
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'White',
                'description' => 'Rigatoni, Κοτόπουλο, Μανιτάρια, Κρέμα Γάλακτος',
                'price' => 9.50,
                'is_active' => true,
                'order' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Green',
                'description' => 'Rigatoni, Πέστο Βασιλικού, Προσούτο, Λιαστή Ντομάτα',
                'price' => 8.50,
                'is_active' => true,
                'order' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        // Burgers
        $categoryId = Category::where('name', 'Burgers')->first()->id;
        Product::insert([
            [
                'category_id' => $categoryId,
                'name' => 'Cheeseburger',
                'description' => 'Ψωμί Brioche, 100% Μοσχαρίσιος Κιμάς, Μαγιονέζα, Τυρί Τσένταρ, Κέτσαπ, Πατάτες Country',
                'price' => 8.50,
                'is_active' => true,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Truffle',
                'description' => 'Ψωμί Brioche, 100% Μοσχαρίσιος Κιμάς, Μαγιονέζα Τρούφας, Τυρί Τσένταρ, Αποξηραμένο Κρεμμύδι, Iceberg, Chutney Σύκο, Πατάτες Country',
                'price' => 12.00,
                'is_active' => true,
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Funky',
                'description' => 'Ψωμί Brioche, 100% Μοσχαρίσιος Κιμάς, Πίκλες, Μπέικον, Μαγιονέζα, Τυρί Τσένταρ, Καραμελωμένα Κρεμμύδια, Iceberg, Μπάρμπεκιου Σος, Πατάτες Country',
                'price' => 11.00,
                'is_active' => true,
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        // Sandwiches
        $categoryId = Category::where('name', 'Sandwiches')->first()->id;
        Product::insert([
            [
                'category_id' => $categoryId,
                'name' => 'Club',
                'description' => 'Τυρί Γκούντα, Ζαμπόν, Μπέικον, Μαρούλι, Ντομάτα, Μαγιονέζα, Πατάτες Country',
                'price' => 7.50,
                'is_active' => true,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        // White Wines
        $categoryId = Category::where('name', 'White Wines')->first()->id;
        Product::insert([
            [
                'category_id' => $categoryId,
                'name' => 'Ποτήρι',
                'description' => '',
                'price' => 4.50,
                'is_active' => true,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'category_id' => $categoryId,
                'name' => 'Λαζαρίδη Ντάμα Κούπα',
                'description' => 'Δράμα, Ξηρό, Ασύρτικο, Μοσχάτο Αλεξάνδρειας, Cabernet, Ugni Blanc, Ροδίτης',
                'price' => 15.00,
                'is_active' => true,
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Κατώγι Αβέρωφ',
                'description' => 'Μέτσοβο, Ξηρό, Ποικιλιακός',
                'price' => 19.00,
                'is_active' => true,
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Κυρ Γιάννη Παράγκα',
                'description' => 'Αμύνταιο, Ξηρό, Ροδίτης Μαλαγουζια',
                'price' => 20.00,
                'is_active' => true,
                'order' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Κτήμα Τσέλεπου Μαντινεία',
                'description' => 'Μαντινεία, Ξηρό, Μοσχοφίλερο',
                'price' => 23.00,
                'is_active' => true,
                'order' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Παλαιά Κλήματα Παπαγιαννάκου',
                'description' => 'Μαρκόπουλο, Ξηρό, Σαββατιανό',
                'price' => 27.00,
                'is_active' => true,
                'order' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Κτήμα Παυλίδη',
                'description' => 'Θράκη, Ξηρό, Cabernet Sauvignon, Ασύρτικο',
                'price' => 31.00,
                'is_active' => true,
                'order' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Κτήμα Γεροβασιλείου Μαλαγουζιά',
                'description' => 'Θεσσαλονίκη, Ξηρό, Μαλαγουζιά',
                'price' => 37.00,
                'is_active' => true,
                'order' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Gaia Θαλασσίτης',
                'description' => 'Σαντορίνη, Ξηρό, Ασύρτικο',
                'price' => 43.00,
                'is_active' => true,
                'order' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        // Rose Wines
        $categoryId = Category::where('name', 'Rose Wines')->first()->id;
        Product::insert([
            [
                'category_id' => $categoryId,
                'name' => 'Ποτήρι',
                'description' => '',
                'price' => 4.50,
                'is_active' => true,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Ροδοινός',
                'description' => 'Τύρναβος, Ημίγλυκο, Μοσχάτο',
                'price' => 15.00,
                'is_active' => true,
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Σκούρας Άκρες',
                'description' => 'Άργος, Ξηρό, Αγιωργίτικο - μοσχοφίλερο',
                'price' => 19.00,
                'is_active' => true,
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Κυρ Γιάννη Παράγκα',
                'description' => 'Αμύνταιο, Ημίξηρος, Syrah - Merlot',
                'price' => 22.00,
                'is_active' => true,
                'order' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Domaine Costa Lazaridi',
                'description' => 'Δράμα, Ξηρό, Merlot',
                'price' => 40.00,
                'is_active' => true,
                'order' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Chateau Miraval',
                'description' => 'Provence, Cinsaut, Grenache Rouge, Syrah',
                'price' => 41.00,
                'is_active' => true,
                'order' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        // Red Wines
        $categoryId = Category::where('name', 'Red Wines')->first()->id;
        Product::insert([
            [
                'category_id' => $categoryId,
                'name' => 'Ποτήρι',
                'description' => '',
                'price' => 4.50,
                'is_active' => true,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Λαζαρίδη Ρήγας Κούπα',
                'description' => 'Δράμα, Ξηρό, Merlot, Ξινόμαυρο',
                'price' => 15.00,
                'is_active' => true,
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Κυρ Γιάννη Παράγκα',
                'description' => 'Μακεδονία, Ξηρό, Merlot, Syrah, Ξυνόμαυρο',
                'price' => 22.00,
                'is_active' => true,
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Αμέθυστος',
                'description' => 'Δράμα, Ξηρό, Cabernet Sauvignon, Merlot, Αγιοργήτικο',
                'price' => 34.00,
                'is_active' => true,
                'order' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Κτήμα Σιγάλα Μμ',
                'description' => 'Σαντορίνη, Ξηρό, Μαντηλαρά, Μαυροτράγανο',
                'price' => 36.00,
                'is_active' => true,
                'order' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Κτήμα Βίβλια Χώρα',
                'description' => 'Καβάλα, Ξηρό, Cabernet Sauvignon, Merlot, Αγιοργήτικο',
                'price' => 36.00,
                'is_active' => true,
                'order' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Το Μαύρο Πρόβατο',
                'description' => 'Καβάλα, Ξηρό, Syrah, Merlot',
                'price' => 37.00,
                'is_active' => true,
                'order' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Κτήμα ΑΛΦΑ',
                'description' => 'Αμύνταιο, Ξηρό, Merlot, Syrah, Ξινόμαυρο',
                'price' => 50.00,
                'is_active' => true,
                'order' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'T-Oinos Clos Stegasta',
                'description' => 'Τήνος, Ξηρό, Μαυροτράγανο',
                'price' => 195.00,
                'is_active' => true,
                'order' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        // Beers
        $categoryId = Category::where('name', 'Beers')->first()->id;
        Product::insert([
            [
                'category_id' => $categoryId,
                'name' => 'Άλφα',
                'description' => '',
                'price' => 3.00,
                'is_active' => true,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Άμστελ',
                'description' => '',
                'price' => 3.00,
                'is_active' => true,
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Μάμος',
                'description' => '',
                'price' => 3.50,
                'is_active' => true,
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Ηeineken',
                'description' => '',
                'price' => 3.50,
                'is_active' => true,
                'order' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Ηeineken 0%',
                'description' => '',
                'price' => 3.50,
                'is_active' => true,
                'order' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Fischer',
                'description' => '',
                'price' => 3.50,
                'is_active' => true,
                'order' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Kaiser',
                'description' => '',
                'price' => 3.50,
                'is_active' => true,
                'order' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Corona',
                'description' => '',
                'price' => 5.00,
                'is_active' => true,
                'order' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Septem mylos',
                'description' => '',
                'price' => 5.00,
                'is_active' => true,
                'order' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        // Refreshments
        $categoryId = Category::where('name', 'Refreshments')->first()->id;
        Product::insert([
            [
                'category_id' => $categoryId,
                'name' => 'Coca cola',
                'description' => '',
                'price' => 2.50,
                'is_active' => true,
                'order' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Coca cola Zero',
                'description' => '',
                'price' => 2.50,
                'is_active' => true,
                'order' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Fanta',
                'description' => '',
                'price' => 2.50,
                'is_active' => true,
                'order' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Sprite',
                'description' => '',
                'price' => 2.50,
                'is_active' => true,
                'order' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Σόδα',
                'description' => '',
                'price' => 2.50,
                'is_active' => true,
                'order' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Λεμονίτα',
                'description' => '',
                'price' => 2.50,
                'is_active' => true,
                'order' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'S.Pellegrino',
                'description' => '',
                'price' => 3.00,
                'is_active' => true,
                'order' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Νερό Θεόνη μικρό',
                'description' => '',
                'price' => 0.50,
                'is_active' => true,
                'order' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => $categoryId,
                'name' => 'Νερό Θεόνη μεγάλο',
                'description' => '',
                'price' => 1.00,
                'is_active' => true,
                'order' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
