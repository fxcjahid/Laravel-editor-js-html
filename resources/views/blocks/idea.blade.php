<div class="mx-10 mt-20 mb-12"
     aria-label="idea">
    <div class="relative rounded-xl border-4 border-theme-color p-6">
        <div class="absolute -left-[62px] -top-[57px] z-10 bg-white p-[10px]">
            <svg width="100px"
                 height="100px"
                 viewBox="0 0 500 500">
                <path fill="#ffc43d"
                      d="M370.44,222.29a120.44,120.44,0,1,0-229.76,50.59l58.4,127.88H300.92l58.4-127.88A120,120,0,0,0,370.44,222.29Z" />
                <path fill="#faae17"
                      d="M250,101.85a120.44,120.44,0,0,0-16.1,1.2,120.37,120.37,0,0,1,93.22,169.83l-58.4,127.88h32.2l58.4-127.88A120.48,120.48,0,0,0,250,101.85Z" />
                <line fill="none"
                      stroke-width="20px"
                      stroke="#000"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      x1="250"
                      x2="250"
                      y1="10.88"
                      y2="50.42" />
                <line fill="none"
                      stroke-width="20px"
                      stroke="#000"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      x1="398.45"
                      x2="370.72"
                      y1="73.67"
                      y2="101.85" />
                <line fill="none"
                      stroke-width="20px"
                      stroke="#000"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      x1="456.14"
                      x2="416.61"
                      y1="223.18"
                      y2="223.18" />
                <line fill="none"
                      stroke-width="20px"
                      stroke="#000"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      x1="101.55"
                      x2="129.28"
                      y1="73.67"
                      y2="101.85" />
                <line fill="none"
                      stroke-width="20px"
                      stroke="#000"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      x1="43.86"
                      x2="83.39"
                      y1="223.18"
                      y2="223.18" />
                <path fill="none"
                      stroke-width="20px"
                      stroke="#000"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M370.44,222.29a120.44,120.44,0,1,0-229.76,50.59l58.4,127.88H300.92l58.4-127.88A120,120,0,0,0,370.44,222.29Z" />
                <path fill="#727373"
                      d="M199,400.76H301a0,0,0,0,1,0,0v37.39a51,51,0,0,1-51,51h0a51,51,0,0,1-51-51V400.76A0,0,0,0,1,199,400.76Z" />
                <path fill="#606161"
                      d="M268.77,400.76v37.39a51,51,0,0,1-34.87,48.33,50.78,50.78,0,0,0,16.1,2.64h0a51,51,0,0,0,51-51V400.76Z" />
                <path fill="none"
                      stroke-width="20px"
                      stroke="#000"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M199,400.76H301a0,0,0,0,1,0,0v37.39a51,51,0,0,1-51,51h0a51,51,0,0,1-51-51V400.76A0,0,0,0,1,199,400.76Z" />
                <line fill="none"
                      stroke-width="20px"
                      stroke="#000"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      x1="186.39"
                      x2="313.61"
                      y1="436.13"
                      y2="436.13" />
                <line fill="none"
                      stroke-width="20px"
                      stroke="#000"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      x1="186.39"
                      x2="313.61"
                      y1="400.76"
                      y2="400.76" />
            </svg>
        </div>
        <div class="flex">
            <div class="mx-5 py-5">
                <h2 class="font-futura my-4 text-2xl font-semibold text-slate-900"
                    aria-label="idea-title">
                    {!! $data['data']->title !!}
                </h2>
                <p class="mt-4 mb-2 text-lg font-normal text-slate-900"
                   aria-label="idea-description">
                    {!! $data['data']->message !!}
                </p>
            </div>
        </div>
    </div>
</div>
