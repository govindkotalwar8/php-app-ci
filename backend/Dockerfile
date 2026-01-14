FROM node:18-alpine
WORKDIR /app
COPY backend/package*.json ./
RUN npm install --production
COPY backend/ .
ENV PORT=5001
EXPOSE 5001
CMD ["node", "index.js"]
