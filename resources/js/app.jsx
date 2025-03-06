import React from 'react';
import ReactDOM from 'react-dom/client';
import SplashCursor from './components/SplashCursor';
import CircularGallery from './components/CircularGallery';

const App = () => {
    return (
        <div>
            <SplashCursor />
        </div>
    );
};

const Circular = () => {
    return (
        <div style={{ height: '600px', position: 'relative' }}>
            <CircularGallery bend={3} textColor="#ffffff" borderRadius={0.05} />
        </div>
    );
};

// Render App ke elemen dengan ID 'app'
const rootApp = document.getElementById('app');
if (rootApp) {
    ReactDOM.createRoot(rootApp).render(<App />);
} else {
    console.error("Elemen dengan ID 'app' tidak ditemukan!");
}

// Render Circular ke elemen dengan ID 'circular'
const rootCircular = document.getElementById('circular');
if (rootCircular) {
    ReactDOM.createRoot(rootCircular).render(<Circular />);
} else {
    console.error("Elemen dengan ID 'circular' tidak ditemukan!");
}
