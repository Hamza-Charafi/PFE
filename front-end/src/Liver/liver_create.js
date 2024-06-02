import React, { useState } from 'react';
import { createLiver } from '../liverService';

const LiverForm = () => {
    const [name, setName] = useState('');
    const [pages, setPages] = useState('');
    const [error, setError] = useState(null);

    const handleSubmit = async (e) => {
        e.preventDefault();
        const newLiver = { name, pages };

        try {
            await createLiver(newLiver);
            setName('');
            setPages('');
            setError(null); // Clear any previous error
        } catch (err) {
            console.error(err);
            setError('Failed to create liver. Please try again.'); // Set error message
        }
    };

    return (
        <form onSubmit={handleSubmit}>
            <div>
                <label htmlFor="name">Liver Name:</label>
                <input
                    type="text"
                    id="name"
                    value={name}
                    onChange={(e) => setName(e.target.value)}
                />
            </div>
            <div>
                <label htmlFor="pages">Pages:</label>
                <input
                    type="number"
                    id="pages"
                    value={pages}
                    onChange={(e) => setPages(e.target.value)}
                />
            </div>
            <button type="submit">Create Liver</button>
            {error && <p style={{ color: 'red' }}>{error}</p>} {/* Display error message */}
        </form>
    );
};

export default LiverForm;
