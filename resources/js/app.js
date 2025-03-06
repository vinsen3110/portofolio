import './bootstrap';
import '../css/app.css';
import { createRoot } from 'react-dom/client';
import React from 'react'; // Tambahkan ini!
import App from './app'; // Pastikan ini benar, bukan './app'

const root = createRoot(document.getElementById('app'));
root.render(<App />);
