import React, { useEffect, useState } from 'react';
import { getLivers, createLiver, getLiver, updateLiver, deleteLiver } from '../liverService';

const LiverList = () => {
    const [livers, setLivers] = useState([]);

    useEffect(() => {
        const fetchLivers = async () => {
            const data = await getLivers();
            setLivers(data);
        };

        fetchLivers();
    }, []);

    return (
        <div>
            <h1>Liver List</h1>
            <ul>
                {livers.map(liver => (
                    <li >{liver.id}  {liver.name} {liver.pages}</li>
                ))}
            </ul>
        </div>
    );
};

export default LiverList;