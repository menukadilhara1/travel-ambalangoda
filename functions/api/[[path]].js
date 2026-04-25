export async function onRequest(context) {
  // Get the original request URL
  const url = new URL(context.request.url);
  
  // Forward everything to your Droplet IP on port 8080
  // Instead of https://travel-ambalangoda.pages.dev/api/register
  // It becomes http://167.71.193.120:8080/api/register
  const targetUrl = `http://167.71.193.120:8080${url.pathname}${url.search}`;
  
  // Create a new request based on the original one
  const proxyRequest = new Request(targetUrl, context.request);
  
  // Change the Host header to match the droplet (required by some servers)
  proxyRequest.headers.set('Host', '167.71.193.120:8080');

  // Fetch the data from the droplet and return it back securely
  return fetch(proxyRequest);
}
