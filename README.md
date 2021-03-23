# Blockchain

## I'm learning Blockchain technology with `javascript`, will soon update table of content.

###### Prerequisites
> Please below the instructions for javascript blockchain project. I will highly recommend 1st install `node` and `NPM` or `Yarn` in your operating system.
- Node.js
- NPM or Yarn

If you want to create a new blockchain project please folow the instruction below:
- Create new folder in your os location
- `yarn init`
- install crypto-js `yarn add crypto-js` for has generate

> If you want to run the blockchain project in your local development system please follow the below instructions:

```base
git clone https://github.com/mbrsagor/blockchain.git
cd blockchain
npm install
node index.js
```

#### Demo Example
```javascript
BlockChain {
  chain: [
    Block {
      timestamp: '2021-03-23',
      data: 'GENESIS',
      previousHash: '0000',
      hash: 'b168fd02a4acc7558feb0c01a0d83f0feb414003ea4c636f97478767bba84ac3',
      nonce: 0
    },
    Block {
      timestamp: '2021-03-23',
      data: 'Hacked',
      previousHash: 'b168fd02a4acc7558feb0c01a0d83f0feb414003ea4c636f97478767bba84ac3',
      hash: 'faba9544407b75511f2234c429da6b5c0ff3af180411d77d6a79ec22e1a179dc',
      nonce: 0
    }
  ]
}
```
