# Dynamic Donut Chart with Laravel

A Laravel-based web application that demonstrates how to create dynamic, interactive donut charts using Apache ECharts. This project showcases data visualization with a clean, responsive design and database-driven chart generation.

## 🌟 Features

- **Dynamic Data Loading**: Charts are populated from database records
- **Interactive Donut Charts**: Built with Apache ECharts for smooth animations and interactions
- **Responsive Design**: Charts adapt to different screen sizes
- **Database Seeding**: Pre-populated sample data for immediate testing
- **Clean Architecture**: Following Laravel best practices
- **Modern Frontend**: Powered by Vite and TailwindCSS

## 🛠️ Technologies Used

- **Backend**: Laravel 12.x, PHP 8.2+
- **Frontend**: Apache ECharts 5.x, Vanilla JavaScript
- **Styling**: TailwindCSS 4.x
- **Build Tool**: Vite 7.x
- **Database**: SQLite (default), MySQL/PostgreSQL compatible
- **Package Manager**: Composer, NPM

## 📋 Prerequisites

Before you begin, ensure you have the following installed:

- PHP 8.2 or higher
- Composer
- Node.js and NPM
- Git

## 🚀 Installation

### 1. Clone the Repository
```bash
git clone https://github.com/ruhulamin63/How-to-Create-Dynamic-Donut-Chart.git
cd How-to-Create-Dynamic-Donut-Chart
```

### 2. Install PHP Dependencies
```bash
composer install
```

### 3. Install Node Dependencies
```bash
npm install
```

### 4. Environment Setup
```bash
# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 5. Database Setup
```bash
# Create SQLite database file (if using SQLite)
touch database/database.sqlite

# Run migrations
php artisan migrate

# Seed the database with sample data
php artisan db:seed --class=ChartSeeder
```

### 6. Build Assets
```bash
# For development
npm run dev

# For production
npm run build
```

### 7. Start the Application
```bash
php artisan serve
```

The application will be available at `http://localhost:8000`

## 📊 Usage

### Viewing the Chart
1. Navigate to `http://localhost:8000/chart` to view the dynamic donut chart
2. The chart displays data from the `charts` table in your database
3. Hover over chart segments to see detailed information
4. The chart is responsive and adapts to different screen sizes

### Chart Data Structure
The chart data is stored in the `charts` table with the following structure:
- `id`: Primary key
- `name`: Display name for chart segment (e.g., "Company A")
- `value`: Numeric value for the segment
- `created_at`: Timestamp
- `updated_at`: Timestamp

### Sample Data
The application comes with pre-seeded sample data:
- Company A: 1048
- Company B: 735
- Company C: 580
- Company D: 484
- Company E: 300

## 🏗️ Project Structure

```
├── app/
│   ├── Http/Controllers/
│   │   └── ChartController.php      # Handles chart data and view
│   └── Models/
│       └── Chart.php                # Chart data model
├── database/
│   ├── migrations/
│   │   └── create_charts_table.php  # Chart table schema
│   └── seeders/
│       └── ChartSeeder.php          # Sample data seeder
├── resources/
│   └── views/
│       └── chart.blade.php          # Chart display template
├── routes/
│   └── web.php                      # Application routes
├── composer.json                    # PHP dependencies
├── package.json                     # Node.js dependencies
└── vite.config.js                   # Vite configuration
```

## 🎨 Customization

### Adding New Data
To add new chart data:

1. **Via Database**: Insert records directly into the `charts` table
2. **Via Seeder**: Modify `database/seeders/ChartSeeder.php`
3. **Via Code**: Use the Chart model in your controllers

Example:
```php
use App\Models\Chart;

Chart::create([
    'name' => 'New Company',
    'value' => 250
]);
```

### Customizing Chart Appearance
Modify the chart options in `resources/views/chart.blade.php`:

```javascript
var option = {
    tooltip: {
        trigger: 'item'
    },
    legend: {
        top: '5%',
        left: 'center'
    },
    series: [{
        // Customize radius, colors, animations, etc.
        radius: ['40%', '70%'],
        // ... other options
    }]
};
```

### Styling Changes
- Edit `resources/css/app.css` for custom styles
- Modify TailwindCSS classes in blade templates
- Update chart container styles in the chart view

## 🔧 Development

### Available Commands

```bash
# Start development server
php artisan serve

# Run migrations
php artisan migrate

# Seed database
php artisan db:seed

# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan view:clear

## 📈 Chart Configuration Options

The ECharts donut chart supports various configuration options:

- **Radius**: Inner and outer radius settings
- **Colors**: Custom color schemes
- **Animations**: Entry and hover animations
- **Tooltips**: Custom tooltip formatting
- **Legends**: Position and styling
- **Labels**: Show/hide and positioning

Refer to the [Apache ECharts documentation](https://echarts.apache.org/en/option.html) for complete configuration options.

### Debug Mode
Enable debug mode in `.env` for detailed error messages:
```
APP_DEBUG=true
```

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📝 License

This project is open-sourced software licensed under the [MIT License](LICENSE).

## 👨‍💻 Author

**Ruhul Amin**
- GitHub: [@ruhulamin63](https://github.com/ruhulamin63)

## 🙏 Acknowledgments

- [Laravel Framework](https://laravel.com/) - The web application framework
- [Apache ECharts](https://echarts.apache.org/) - The charting library
- [TailwindCSS](https://tailwindcss.com/) - The utility-first CSS framework
- [Vite](https://vitejs.dev/) - The build tool

## 📞 Support

If you encounter any issues or have questions, please [open an issue](https://github.com/ruhulamin63/How-to-Create-Dynamic-Donut-Chart/issues) on GitHub.

---

**⭐ Don't forget to star this repository if you found it helpful!**