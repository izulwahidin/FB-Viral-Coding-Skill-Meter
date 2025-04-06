function getConsistentIndex(name, arr) {
    // Create consistent index using crc32 hash
    const hash = crc32(name);
    const index = Math.abs(hash % arr.length);
    return arr[index];
}

// CRC32 implementation that matches PHP's output
function crc32(str) {
    let crc = -1;
    for (let i = 0; i < str.length; i++) {
        crc = (crc >>> 8) ^ crc32Table[(crc ^ str.charCodeAt(i)) & 0xFF];
    }
    // Return signed 32-bit integer like PHP does
    return (crc ^ -1) | 0;
}

// Pre-computed CRC32 table
const crc32Table = new Array(256);
for (let i = 0; i < 256; i++) {
    let c = i;
    for (let j = 0; j < 8; j++) {
        c = ((c & 1) ? (0xEDB88320 ^ (c >>> 1)) : (c >>> 1));
    }
    crc32Table[i] = c;
}