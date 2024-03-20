import './bootstrap';

// Import our custom CSS
import '~resources/scss/app.scss'

//import image
import.meta.glob(["../img/**"]);


mix.sass('resources/scss/app.scss', 'public/css');
