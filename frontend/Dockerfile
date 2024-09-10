# Use the official Node.js image
FROM node:18

# Set working directory
WORKDIR /app

# Install dependencies
COPY package*.json ./
RUN npm install

# Copy application files
COPY . .

# Build the application
RUN npm run build

# Install a simple HTTP server to serve the static files
RUN npm install -g serve

# Expose port 80
EXPOSE 80

# Command to run the server
CMD ["serve", "-s", "dist"]
