import './bootstrap';
import React from 'react';
import ReactDOM from 'react-dom/client';
import ExcalidrawComponent from './components/ExcalidrawComponent';

import process from 'process';
window.process = process;

if (document.getElementById('app')) {
    ReactDOM.createRoot(document.getElementById('app')).render(
        <React.StrictMode>
            <ExcalidrawComponent />
        </React.StrictMode>
    );
}