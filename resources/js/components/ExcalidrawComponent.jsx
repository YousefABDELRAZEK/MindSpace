import React from 'react';
import { Excalidraw } from "@excalidraw/excalidraw";

export default function ExcalidrawComponent() {
    return (
        <div style={{ height: "100vh", width: "100%", margin: 0, overflow: 'hidden' }}>
            <Excalidraw style={{ height: '100%', width: '100%' }} />
        </div>
    );
}
