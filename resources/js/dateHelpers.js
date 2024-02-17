export function useDateHelpers() {
    const formatDate = (date) => {
        return date ? new Date(date).toLocaleString('fr-FR') : '-';
    }

    return {
        formatDate,
    }
}
