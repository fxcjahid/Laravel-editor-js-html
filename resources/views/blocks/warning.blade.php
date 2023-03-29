 <div class="my-5 md:my-10"
      aria-label="warning">
     <div class="rounded-2xl border-none border-theme-color bg-theme-light p-5 shadow-xl">
         <div class="flex flex-col md:grid md:gap-3">
             <div
                  class="col-start-1 col-end-[22] row-start-1 row-end-auto inline-flex items-center justify-center p-5">
                 <svg xmlns="http://www.w3.org/2000/svg"
                      width="120"
                      height="120"
                      fill="currentColor"
                      class="text-white"
                      viewBox="0 0 16 16">
                     <path
                           d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z" />
                     <path
                           d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z" />
                 </svg>
             </div>
             <div class="col-start-[22] col-end-auto row-start-1 row-end-auto gap-2">
                 <div class="font-futura text-2xl font-semibold !text-white md:my-4"
                      aria-label="warning-title">
                     {!! $data['data']->title !!}
                 </div>
                 <p class="!mt-4 mb-2 text-lg font-normal !leading-snug !text-white"
                    aria-label="warning-description">
                     {!! $data['data']->message !!}
                 </p>
             </div>
         </div>
     </div>
 </div>
