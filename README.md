Minimal Markup
==============

Basic league/commonmark extension which enables
 __emphasized__, **strong** (optional)
plus autolinking URLs
but no single delimiters (due to possible collisions when
using these within words for gender-sensitive language)

Requirements
------------

* PHP 7.4 or higher

Get started
-----------

    $converter = new \MinimalMark\MinimalMarkConverter();

    echo $converter->convert('This is __em__.');

With strong enabled

    $converter = new \MinimalMark\MinimalMarkConverter(['minimalmark' => ['use_asterisk' => true]]);

    echo $converter->convert('This is **strong**.');

License
-------
The library is licensed under the [BSD-3-Clause] license.

(C) 2025 Moses Mendelssohn Center for European-Jewish Studies (MMZ)
    Daniel Burckhardt

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

3. Neither the name of the copyright holder nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

[BSD-3-Clause]:https://www.opensource.org/licenses/BSD-3-Clause
