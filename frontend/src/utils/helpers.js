import {cloudinaryConfig} from "./constants";

export function toFormData(data) {
    const formData = new FormData();
    Object.entries(data).forEach(([key, val]) => {
        formData.append(key, val);
    })
    return formData;
}


export function getCloudinaryImgUrl(publicId) {
    return `https://res.cloudinary.com/${cloudinaryConfig.cloudName}/image/upload/v1654771394/${publicId}.jpg`
}