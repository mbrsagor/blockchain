const sha256 = require('crypto-js/sha256');


class BlockChain{
    // Construction input argument
    constructor(index, timestamp, data, previousHash=''){
        this.index = index;
        this.timestamp = timestamp
        this.data = data;
        this.previousHash = previousHash
        this.hash = '';
    }

    // Implement hash
    myHash(){
        return sha256(this.index + this.previousHash + this.timestamp + JSON.stringify(this.data)).toString();
    }
}

// Instance of blockchain class
const block_chain = new BlockChain();
