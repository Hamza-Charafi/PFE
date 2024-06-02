import axiosInstance from './api/axios';

export const getLivers = async () => {
    const response = await axiosInstance.get('/livers');
    return response.data;
};

export const createLiver = async (data) => {
    const response = await axiosInstance.post('/livers', data);
    return response.data;
};

export const getLiver = async (id) => {
    const response = await axiosInstance.get(`/livers/${id}`);
    return response.data;
};

export const updateLiver = async (id, data) => {
    const response = await axiosInstance.put(`/livers/${id}`, data);
    return response.data;
};


export const deleteLiver = async (id) => {
    const response = await axiosInstance.delete(`/livers/${id}`);
    return response.data;
};
