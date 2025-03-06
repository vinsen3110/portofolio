import './bootstrap';
import '../css/app.css';
import { createRoot } from 'react-dom/client';
import React from 'react';
import App from './app';

const root = createRoot(document.getElementById('app'));
root.render(<App />);

