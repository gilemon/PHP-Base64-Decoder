# PHP Base64 Decoder

Why have a custom Base64 decode function if PHP already provides the native `base64_decode` function? Well, some strict web hosts disable the native one to prevent exploits that use that method.

This implementation is based on native PHP C source code (https://github.com/php/php-src/blob/master/ext/standard/base64.c). It is a slightly slower than the native `base64_decode`. Depending on you configuration it can handle large input (>1MO under 1 second).

### Usage

Use `base64_decoder` as you would the standard `base64_decode` function.

### License 

(The MIT License)

Copyright (c) 2018 Gilemon Villemin

Permission is hereby granted, free of charge, to any person obtaining
a copy of this software and associated documentation files (the
'Software'), to deal in the Software without restriction, including
without limitation the rights to use, copy, modify, merge, publish,
distribute, sublicense, and/or sell copies of the Software, and to
permit persons to whom the Software is furnished to do so, subject to
the following conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED 'AS IS', WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
