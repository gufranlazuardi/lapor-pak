    <?php


    use App\Models\User;
    use Database\Seeders\AdminSeeder;
    use Database\Seeders\RolePermissionSeeder;
    // use Illuminate\Database\Console\Seeds\WithoutModelEvents;
    use Illuminate\Database\Seeder;

    class DatabaseSeeder extends Seeder
    {
        /**
         * Seed the application's database.
         */
        public function run(): void
        {
            $this->call([
                RolePermissionSeeder::class,
                AdminSeeder::class,
            ]);
        }
    }
