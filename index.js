const sha256 = require('crypto-js/sha256');

class Block {
    constructor(timestamp, data, previousHash="default hash") {
        this.timestamp = timestamp;
        this.data = data;
        this.previousHash = previousHash;
        this.hash = this.calculateHash();
    }

    calculateHash(){
        return sha256(this.timestamp + JSON.stringify(this.data) + this.previousHash).toString();
    }
}

class BlockChain {
    constructor(){
        this.chain = [this.generateGenesisChain()];
    }

    generateGenesisChain(){
        return new Block('2021-03-23', 'GENESIS', '0000');
    }

    getLatestBlock(){
        return this.chain[this.chain.length - 1];
    }

    addBlock(block){
        block.previousHash = this.getLatestBlock().hash;
        block.hash = block.calculateHash();
        this.chain.push(block);
    }
}

const block = new Block('2021-03-23', {total:45000});
// console.log(block);

const blockchain = new BlockChain()
blockchain.addBlock(block);
console.log(blockchain);
